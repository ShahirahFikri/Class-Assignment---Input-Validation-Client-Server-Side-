# Class Assignments

* **Name: Nurul Shahirah Binti Ahmad Fikri** 
* **Matric ID: 2013890**

## Class Assignment 1 - Input Validation

## *studentdetails.html* <br /> 
This is an HTML file that contains the markup and styling for a form that is used to collect details of a student. The form has fields for the student's name, matric number, current and home address, email, mobile phone number, and home phone number. The styling of the form is done using CSS, which defines the layout, colors, and fonts used in the form.

A container div with the class "container" encloses the form. The form itself is defined using the form element and has the action attribute set to "process_form.php", which indicates that the data collected by the form will be sent to a server-side script for processing.

Each input element in the form has a name attribute, which is used to identify the form data when it is submitted, and a type attribute, which determines the type of input field. The textarea element is used for multi-line text input.

The form also includes some JavaScript, which is triggered when the submit button is clicked. The validateForm() function is called, which is responsible for ensuring that all required fields are filled in before the form can be submitted.

## *process_form.php* <br /> 
This is a PHP script that is used to handle form data submitted via the HTTP POST method. The script first checks if the request method is POST and then retrieves the form data submitted by the user. It then applies several regular expression validations to ensure that the submitted data is in the correct format.

If any of the form fields fail validation, the script stores an error message in an array called $errors and redirects the user back to the form page. If all the form data is valid, the script displays the data on the page using the echo statement. This script is able to process and validate user-submitted data through an HTML form, making sure the data is in the right format and restricting malicious input.

## *Link from one page to another* <br /> 
The HTML document appears to be a form for gathering student information. It has a number of input fields, including those for names, matric numbers, addresses, emails, and phone numbers. The form also has a submit button, which when pressed sends the form's data to a PHP file called "process form.php." The $_POST superglobal array is used by the PHP script to receive the form data, which is then validated using regular expressions. The script echoes the form data if the validation is successful. The script doesn't run the echo statements if the validation fails. 

## Class Assignment 2 - Authentication

## *registration.php* <br /> 
registration.php is an HTML document that contains a user registration form. The form has several input fields, including full name, email, password, and repeat password. Type, name, id, placeholder, required, and pattern are some of the attributes of the input fields. The document also contains some CSS styling rules that define the appearance of the form elements. The font family, background colour, padding, margin, border, and other properties of the form elements are specified by CSS rules.

The form includes a "Register" button that leads to the action_page.php file, which processes the user's registration information. For users who already have an account, there is a "Sign in" link. A regular expression is used to define the pattern attribute in two input fields: full name and email. The pattern attribute limits the input values of the input fields to the regular expression pattern specified. In this case, the full name can only contain alphabetical characters and spaces, while the email must be a valid email address.

## *login.php* <br /> 

## Class Assignment 3 - Authorization
