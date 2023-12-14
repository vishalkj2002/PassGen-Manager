
const welcomeMessage = "We're delighted to have you on board as part of our secure community. Your security is our top priority, and we're here to simplify and safeguard your digital life.";

const welcomeTextElement = document.getElementById('welcome-text');
let charIndex = 0;

function typeWelcomeMessage() {
    welcomeTextElement.textContent = welcomeMessage.slice(0, charIndex++);
    if (charIndex <= welcomeMessage.length) {
        setTimeout(typeWelcomeMessage, 20); // Adjust the typing speed (milliseconds)
    }
}

// Call the typing function when the page loads
window.onload = function () {
    typeWelcomeMessage();
};

const showpasswords = () => {


    //For filling the table
    let tb = document.querySelector('table')
    let data = localStorage.getItem('passwords')
    if (data === null) {
        tb.innerHTML = 'No Data to show'
    }
    else {
        tb.innerHTML = `<tr>
        <th>Website</th>
        <th>Username</th>
        <th>Password</th>
        <th>Edit/Delete</th>
    </tr>`
        let arr = JSON.parse(data)
        let str = ""
        for (let i = 0; i < arr.length; i++) {
            const element = arr[i];

            str += `<tr>
        <td>${element.website}</td>
        <td>${element.username}</td>
        <td>${element.password}</td>
        <td>${"Delete"}</td>
        </tr>`
        }

        tb.innerHTML = tb.innerHTML + str
    }
}

showpasswords()



document.querySelector('#submitbtn').addEventListener('click', (a) => {
    a.preventDefault()
    console.log(input1.value, input2.value, input3.value)
    let passwords = localStorage.getItem("passwords")
    console.log(passwords)
    if (passwords == null) {
        let json = []
        json.push({ website: input1.value, username: input2.value, password: input3.value })
        localStorage.setItem("passwords", JSON.stringify(json))
    }
    else {
        let json = JSON.parse(localStorage.getItem("passwords"))
        json.push({ website: input1.value, username: input2.value, password: input3.value })
        localStorage.setItem("passwords", JSON.stringify(json))
    }
    showpasswords();
})

