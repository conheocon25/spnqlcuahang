function keypress(e){
var keypressed = null;

    if (window.event)
    {
    keypressed = window.event.keyCode; //IE
    }
    else
    {
    keypressed = e.which; 
    }

    if (keypressed < 48 || keypressed > 57)
    { 
        if (keypressed == 8 || keypressed == 127)
        {
        return;
        }
    return false;
    }

}