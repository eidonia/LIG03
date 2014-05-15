<?php

class ContactFormulaireRquiba{



    public $nom;
    public $mail;
    public $tel;
    public $sujet;
    public $message;
	public $webmaster;
    public $sendCheck = null;


    public function envoi_mail(){ 
 
       $contenu_message = "Nom : ".$this->nom."\nMail : ".$this->mail."\nSujet : ".$this->sujet."\nTelephone : ".$this->tel."\nMessage : ".$this->message;
	     $entete = "From: ".$this->nom." <".$this->mail."> \nContent-Type: text/html; charset=iso-8859-1";	 
       mail($this->webmaster,$this->sujet,$contenu_message,$entete);
	
	  }


    public function verif_null($var)
    {
      return (!empty($var))?$var:null;
    }

    public function verif_mail($var)
    {
      return (preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#',$var))?$var:null;
    }

    public function verif_tel($var)
    {
     return (preg_match('#^[0-9]{9,18}$#',$var))?$var:null;
    }


    public function inputTrue($input,$type = '1'){
        
        $style_blanc = ' style = "font-family: verdana;border: solid #000000 1px;font-size: 8pt;color: #000000;background-color: #ffffff" ';
        $style_rouge = ' style = "font-family: verdana;border: solid #000000 1px;font-size: 8pt;color: #000000;background-color: #ff0000" '; 
        $test = null;
        if(isset($_POST['nom'])){

        switch($type){
            case '1': $test = $this->verif_null($input);
            break;
            
            case '2': $test = $this->verif_mail($input);
            break;
        
            case '3': $test = $this->verif_tel($input);
            break;
        }
        
        if(empty($test)){
              echo $style_rouge;
           }else{
              echo $style_blanc;
           }
        }
    
    }
    

    public function loadForm($data){
        extract($data);
        $this->nom      = trim(htmlentities($nom, ENT_QUOTES));
        $this->mail     = $this->verif_mail($mail);
        $this->tel      = $this->verif_tel($tel);
        $this->sujet    = trim(htmlentities($sujet, ENT_QUOTES));
        $this->message  = trim(htmlentities($message, ENT_QUOTES));
        $test = $this->testForm();
        if(!empty($test)){
           $this->envoi_mail();
           $this->printForm();
           $this->sendCheck = 1;
        }else{
            echo '<div style="padding:5px;border:solid 2px #FF0000;background-color:#FEDFDF;width:600px;color:#ff0000;" >';
              echo 'Veuillez correctement remplir les champs en rouge.';
            echo '</div>';  
        }
    } 

    public function printForm(){
      echo '<div style="padding:2px;margin:2px;" >';
        echo '<h2>Votre message à bien été envoyé</h2>';
        echo '<a href="./">Retour á la page d\'accueil</a><br />';
      echo '</div>';
      echo '<div style="padding:2px;border:solid 2px #000000;background-color:#000001;width:600px;color:#ffffff;" >';
        echo 'Contenu de votre message envoyé ';
      echo '</div>';
      echo '<div style="padding:2px;border:solid 2px #000000;background-color:#CDE9E5;width:600px;" >';
        echo '<ul><li><b>Votre nom / Raison Social : </b>'.$this->nom.'</li>';
        echo '<li><b>Votre mail : </b>'.$this->mail.'</li>';
        echo '<li><b>Telephone : </b>'.$this->tel.'</li>';
        echo '<li><b>Sujet : </b>'.$this->sujet.'</li>';
        echo '<li><b>Votre message : </b>'.$this->message.'</li></ul>'; 
      echo '</div>';       
    }



    public function testForm(){
       if($this->verif_null($this->nom) and $this->verif_null($this->mail) and $this->verif_null($this->tel) and $this->verif_null($this->sujet) and $this->verif_null($this->message)){
          if($this->verif_mail($this->mail) and $this->verif_tel($this->tel)){
              return 1;
          }
          return NULL; 
       }
       return NULL; 
    }

}

?>
<?php

$contact = new ContactFormulaireRquiba();

$contact->webmaster = 'bastien_rambeaud@hotmail.com'; // Veuillez indiquez votre adresse email


if(isset($_POST['nom'])){
    $contact->loadForm($_POST);
}


$send = $contact->sendCheck;



?>
<div style="width:600px;padding:5px;">
<form method="post">
  <table width="100%" height="317" border="0">
    <tr>
      <td width="30%" align="right" valign="middle">
	      &nbsp;&nbsp;
      </td>
      <td width="70%">
	      <b>Soit</b> <a href="mailto:<?php echo $contact->webmaster; ?>">cliquer ici pour envoyer un mail directement</a><br />
        <b>Ou</b> veuillez remplir le formulaire de contact :<br /> 
	    </td>
    </tr>
    <tr>
      <td width="30%" align="right" valign="middle">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Votre nom / Raison social <b>*</b> :</font>
      </td>
      <td width="60%">
	      <input type="text" name="nom"  size="50" <?php $contact->inputTrue($contact->nom); ?> value="<?php echo $contact->nom; ?>" /> 
	    </td>
    </tr>
    <tr>
      <td align="right" valign="middle">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Votre mail <b>*</b> :</font></td>
      <td>	    
	      <input type="text" name="mail" size="50" <?php $contact->inputTrue($contact->mail,'2'); ?> value="<?php echo $contact->mail; ?>" />  
      </td>
    </tr>
    <tr>
      <td align="right" valign="middle">
        <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Tel <b>*</b> :</font></td>
      <td>  
	      <input type="text" name="tel" size="20" <?php $contact->inputTrue($contact->tel,'3'); ?> value="<?php echo $contact->tel; ?>" /> 
      </td>
    </tr>
      <td  align="right" valign="middle">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Sujet <b>*</b> :</font>
      </td>
      <td>
	      <input type="text" name="sujet" size="50" <?php $contact->inputTrue($contact->sujet); ?> value="<?php echo $contact->sujet; ?>" /> 
      </td>
    </tr>
    <tr>
      <td height="181" align="right" valign="top">
	      <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Message  <b>*</b>  : </font>
      </td>
      <td valign="top">  
        <textarea name="message"  cols="47" <?php $contact->inputTrue($contact->message); ?> rows="10" ><?php echo $contact->message; ?></textarea>
      </td>
    </tr>
    <tr>
      <td>
        &nbsp;  
      </td>
      <td valign="TOP">
	      (<b>*</b>) Champ obligatoire.   
      </td>
    </tr>
    <tr>
      <td>
        &nbsp;  
      </td>
      <td valign="TOP">
	      <input type="submit" style = "font-family: verdana;padding: 5px 45px 5px 45px;border: solid #000000 2px;font-size: 8pt;color: #ffffff;background-color: #32269F"  name="envoyer" value="Envoyer" />
      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>