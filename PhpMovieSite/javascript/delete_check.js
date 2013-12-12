function delete_check()
{

var answer = confirm ("Are you sure you want to delete ?")
if (answer)
{
    window.location.href('../mysql/deletemoviesite.php');
}
else
{
    alert ("Cancled");
}

}
