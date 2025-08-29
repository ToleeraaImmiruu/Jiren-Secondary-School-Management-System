const form=document.querySelector("#announcementForm");
form.addEventListener("submit", function(e){
e.preventDefault();
formValidation();
});
function formValidation(){ 
is_valid=true;
const title=document.querySelector("#title").value.toUpperCase();
const body=document.querySelector("#body").value.toLowerCase();

document.querySelector("#title").value=title;
document.querySelector("#body").value=body;





if(title===""){
alert("Title cannot be empty");
is_valid=false;
}
if(body===""){
    alert("Body cannot be empty");
    is_valid=false;
}
if(is_valid){
    if(document.forms[0].for[0].checked){
    $teacher=confirm("THIS ANNOUNCEMENT WILL BE SENT TO STUDENTS");
    if($teacher) form.submit();}
    else if(document.forms[0].for[1].checked){
    $student=confirm("THIS ANNOUNCEMENT WILL BE SENT TO TEACHERS");
    if($student) form.submit();
    }
    else{
    alert("YOU HAVE TO CHOOSE WHO THIS ANNOUNCEMENT IS FOR!");
    }}

}
