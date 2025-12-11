const nav = document.getElementById('nav')
const pointer = document.getElementById('pointerBanner');
const selectCountryCode = document.getElementById('countryCode')

const slider = document.getElementById('slider');


document.addEventListener('scroll', navBackgorund);

document.addEventListener('mousemove', (e) => {pointerMovement(e)});


slider.innerHTML += slider.innerHTML;


function navBackgorund () {
    let scrollY = window.scrollY;
    console.log(scrollY);
    
    if(scrollY > 200 ) {
        nav.classList.add('navBg');
    } else {
        nav.classList.remove('navBg');
    }
}

function pointerMovement(e) {
    let pointerX = e.clientX;
    let pointerY = e.clientY;

    pointer.style.top = `${pointerY}px`;
    pointer.style.left = `${pointerX}px`;
}


async function getCountries () {
    try {
        const res = await fetch("https://aaapis.com/api/v1/info/countries/" , {
            headers: {
                "Authorization" : "Token 122e15297075245cfc8276219e0768f60f0e978b",
                "Content-Type" : "application/json"
            }
        })

        if(!res.ok) {
            throw new Error('Error Fetching URL.')
        }

        const data = await res.json();
        const countries = data.countries;
        console.log(data);
        
        countries.forEach(country => {
            let option = document.createElement('option');

            option.value = `+${country.phone_international_prefix}`
            
            option.dataset.open = `${country.flag} +${country.phone_international_prefix}`
            option.dataset.closed = `+${country.phone_international_prefix}`

            option.textContent = `${country.flag} +${country.phone_international_prefix}`;
            
            if(country.name === "Costa Rica") {
                option.selected = `${country.flag} +${country.phone_international_prefix}`
            }
            
            selectCountryCode.appendChild(option);
        })

        selectCountryCode.addEventListener("change", (e) => {
            const selected = e.target.selectedOptions[0];
            selected.textContent = selected.dataset.closed;
        });
    } catch (err) {
        console.error(err);
    }
}

getCountries();