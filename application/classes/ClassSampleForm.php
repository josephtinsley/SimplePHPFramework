<?PHP
Class SampleForm {

    public static function form() { 
            $html='<table class="sample-form">'."\n";
                $html.='<tr><td class="font18">First Name:</td> <td><input type="text" /></td> </tr>'."\n";
                $html.='<tr><td class="font18">Last Name:</td> <td><input type="text" /></td> </tr>'."\n";
                $html.='<tr><td>&nbsp;</td><td><button class="curve-border5 submit-button">Fake Button</button></td></tr>'."\n";
            $html.='</table><!-- End Form -->';
        return $html;
    }
}//END CLASS