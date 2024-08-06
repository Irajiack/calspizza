function mobile_menu(Action)
{
    if (Action === "close")
    {
        document.getElementById('FullMenu').style.display = 'none';
        document.getElementById('closeMenu').style.display = 'none';
        document.getElementById('openMenu').style.display = 'block';
    }
    else
    {
        document.getElementById('FullMenu').style.display = 'block';
        document.getElementById('closeMenu').style.display = 'block';
        document.getElementById('openMenu').style.display = 'none';
    }
    
}