// Array containing all 77 districts of Nepal
const nepalDistricts = [
    "Achham", "Arghakhanchi", "Baglung", "Baitadi", "Bajhang", "Bajura", "Banke", "Bara", 
    "Bardiya", "Bhaktapur", "Bhojpur", "Chitwan", "Dadeldhura", "Dailekh", "Dang", 
    "Darchula", "Dhading", "Dhankuta", "Dhanusha", "Dolakha", "Dolpa", "Doti", "Gorkha", 
    "Gulmi", "Humla", "Ilam", "Jajarkot", "Jhapa", "Jumla", "Kailali", "Kalikot", 
    "Kanchanpur", "Kapilvastu", "Kaski", "Kavrepalanchok", "Khotang", "Lalitpur", 
    "Lamjung", "Mahottari", "Makwanpur", "Manang", "Morang", "Mugu", "Mustang", 
    "Myagdi", "Nawalpur", "Nuwakot", "Okhaldhunga", "Palpa", "Panchthar", "Parasi", 
    "Parbat", "Parsa", "Pyuthan", "Ramechhap", "Rasuwa", "Rautahat", "Rolpa", "Rukum East", 
    "Rukum West", "Rupandehi", "Salyan", "Sankhuwasabha", "Saptari", "Sarlahi", "Sindhuli", 
    "Sindhupalchok", "Siraha", "Solukhumbu", "Sunsari", "Surkhet", "Syangja", "Tanahun", 
    "Taplejung", "Terhathum", "Udayapur"
];

// Dynamically populate 77 Districts on load
document.addEventListener('DOMContentLoaded', () => {
    const districtSelect = document.getElementById('district');
    nepalDistricts.forEach(district => {
        const option = document.createElement('option');
        option.value = district;
        option.textContent = district;
        districtSelect.appendChild(option);
    });
});

document.getElementById('registrationForm').addEventListener('submit', function(event) {
    let valid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(function(error) {
        error.textContent = '';
    });

    // 1. Validate First Name (Required, 1-50 alphabets)
    const firstName = document.getElementById('firstName').value.trim();
    if (!/^[A-Za-z]{1,50}$/.test(firstName)) {
        document.getElementById('firstNameError').textContent = 'First Name is required and must contain alphabets only (1-50 chars).';
        valid = false;
    }

    // 2. Validate Last Name (Optional, 1-50 alphabets if entered)
    const lastName = document.getElementById('lastName').value.trim();
    if (lastName && !/^[A-Za-z]{1,50}$/.test(lastName)) {
        document.getElementById('lastNameError').textContent = 'Last Name must contain alphabets only (1-50 chars).';
        valid = false;
    }

    // 3. Validate Date of Birth (Required)
    const dob = document.getElementById('dob').value;
    if (!dob) {
        document.getElementById('dobError').textContent = 'Date of Birth is required.';
        valid = false;
    }

    // 4. Validate Gender (Required)
    const gender = document.getElementById('gender').value;
    if (!gender) {
        document.getElementById('genderError').textContent = 'Gender selection is required.';
        valid = false;
    }

    // 5. Validate Provenience (Required)
    const provenience = document.getElementById('provenience').value;
    if (!provenience) {
        document.getElementById('provenienceError').textContent = 'Provenience is required.';
        valid = false;
    }

    // 6. Validate District (Required)
    const district = document.getElementById('district').value;
    if (!district) {
        document.getElementById('districtError').textContent = 'District is required.';
        valid = false;
    }

    // 7. Validate Cell Phone (Required, exactly 10 digits)
    const cellPhone = document.getElementById('cellPhone').value.trim();
    if (!/^\d{10}$/.test(cellPhone)) {
        document.getElementById('cellPhoneError').textContent = 'Cell Phone must be exactly 10 digits without symbols.';
        valid = false;
    }

    // 8. Validate Email (Optional, formatted if entered)
    const email = document.getElementById('email').value.trim();
    if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('emailError').textContent = 'Please enter a valid email address.';
        valid = false;
    }

    // 9. Validate User Name (Required, starts with alphabet, digits, only @ and _ allowed, length 6-15)
    const userName = document.getElementById('userName').value.trim();
    if (!/^[A-Za-z][A-Za-z0-9@_]{5,14}$/.test(userName)) {
        document.getElementById('userNameError').textContent = 'Must start with a letter, max special chars @/_, 6-15 chars long.';
        valid = false;
    }

    // 10. Validate Password (Required, 1 lower, 1 upper, 1 digit, 1 special char, length 8-20)
    const password = document.getElementById('password').value;
    if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&_])[A-Za-z\d@$!%*?&_]{8,20}$/.test(password)) {
        document.getElementById('passwordError').textContent = 'Requires uppercase, lowercase, digit, special char (8-20 chars).';
        valid = false;
    }

    // 11. Validate Confirm Password (Required, match password)
    const confirmPassword = document.getElementById('confirmPassword').value;
    if (!confirmPassword || confirmPassword !== password) {
        document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
        valid = false;
    }

    // Stop form submission if invalid
    if (!valid) {
        event.preventDefault();
    }
});