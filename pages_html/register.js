// const countriesDropDown = document.getElementById("countriesDropDown");
const api_url_counties = "https://roloca.coldfuse.io/judete"
const api_url_orase = "https://roloca.coldfuse.io/orase"



// function ValidateEmail(inputText)
// {
//     const div_email = document.getElementById("email-div");
//     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     if(inputText.value.match(mailformat))
//     {
//         alert("Valid email address!");
//         document.form.email.focus();
//         div_email.style.display = "block"
//         div_email.innerHTML = "Valid"
//         return true;
//     }
//     else
//     {
//         alert("You have entered an invalid email address!");
//         document.form.email.focus();
//         div_email.style.display = "block"
//         div_email.innerHTML = "Invalid"
//         return false;
//     }
// }

function addOption(value) {
    const countriesDropDown = document.getElementById("countiesDropDown");
    const option = document.createElement("OPTION");
    option.setAttribute('value', value);
    const text = document.createTextNode(value);
    option.appendChild(text);
    countriesDropDown.appendChild(option);
}


// Defining async function
async function getapi(url) {
    const result = []

    // Storing response
    const response = await fetch(url);

    // Storing data in form of JSON
    const data = await response.json();
    if (response) {
        console.log("response from api")
    }

    const counties = [];
    data.forEach((county) => {
        counties.push([county.nume, api_url_orase +"/"+`${county.auto}`]);
    });



    for(let i = 0; i < counties.length; i++ ){
        const cities_all_response = await fetch(counties[i][1]);
        const cities_all_value = await cities_all_response.json();

        const cities_name = []
        cities_all_value.forEach((city) => {
            cities_name.push(city.nume);
        });
        result.push([counties[i][0], cities_name]);
        addOption(counties[i][0]);

    }

    const countriesDropDown = document.getElementById("countiesDropDown");
    countriesDropDown.addEventListener('change', function(){
        result.forEach(elem=>{
            if(this.value === elem[0]){

                const citiesDropDown = document.getElementById("citiesDropDown");
                while(citiesDropDown.options.length > 0){
                    citiesDropDown.options.remove(0)
                }

                elem[1].forEach(city=>{
                    const option = document.createElement("OPTION");
                    option.setAttribute('value', city);
                    const text = document.createTextNode(city);
                    option.appendChild(text);
                    citiesDropDown.appendChild(option);
                })

            }
        })
    })

}

getapi(api_url_counties);

//-----------------live search select
// $(document).ready(function() {
//
//     // Initialize select2
//     $("#countriesDropDown").select2();
// })

//-----------------validate form


window.addEventListener("DOMContentLoaded", (event) => {
    const firstname = document.getElementById("firstname");
    firstname.addEventListener('input', (event)=>{
        const f_value = firstname.value
        const div_valid_invalid = document.getElementById("div_valid_invalid1");

        if(f_value.length < 3 ){
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "red"
            div_valid_invalid.innerHTML = "Invalid, must contain at least 3 characters"
        } else{
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "green"
            div_valid_invalid.innerHTML = "Valid"
        }
    })

    const lastname = document.getElementById("lastname");
    lastname.addEventListener('input', (event)=>{
        const f_value = lastname.value
        const div_valid_invalid = document.getElementById("div_valid_invalid2");

        if(f_value.length < 2 ){
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "red"
            div_valid_invalid.innerHTML = "Invalid, must contain at least 2 characters"
        } else{
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "green"
            div_valid_invalid.innerHTML = "Valid"
        }
    })

    const email = document.getElementById("email2");
    email.addEventListener('input', (event)=>{
        const div_valid_invalid = document.getElementById("div_valid_invalid3");

        if(email.validity.typeMismatch){
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "red"
            div_valid_invalid.innerHTML = "Invalid, must be something@other"
        } else{
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "green"
            div_valid_invalid.innerHTML = "Valid"
        }
    })

    const password = document.getElementById("psw");
    password.addEventListener('input', (event)=>{
        const p_value = password.value
        const div_valid_invalid = document.getElementById("div_valid_invalid4");

        if(p_value.length < 8 || p_value.length > 20){
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "red"
            div_valid_invalid.innerHTML = "Invalid, password must be between 8 and 20 characters"
        }
        else{
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "green"
            div_valid_invalid.innerHTML = "Valid"
        }
    })

    const password_2 = document.getElementById("psw-repeat");
    password_2.addEventListener('input', (event)=>{
        const div_valid_invalid = document.getElementById("div_valid_invalid5");

        if(password_2.value === password.value){
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "green"
            div_valid_invalid.innerHTML = "Valid"
        }
        else{
            div_valid_invalid.style.display = "block"
            div_valid_invalid.style.color = "red"
            div_valid_invalid.innerHTML = "Invalid, passwords don't match"
        }
    })
});




