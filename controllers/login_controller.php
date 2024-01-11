<?php

session_start();

if (!empty($_POST) && isset($_POST['login'])) {
    $username = $_POST['matricule'];
    $password = $_POST['password'];

    if(isset($username) && isset($password)) {


        if (!empty($username) && !empty($password))
        {
            


            $user = UTILISATEUR::login($username,$password); 
            $_SESSION['IDUSER']= $user['IDUSER']; 
            $_SESSION['USERNAME']= $user['LOGIN_USER'];
            
            $_SESSION['PASSWORD_USER']= $user['PASSWORD_USER'];
            $_SESSION['CIVILITE_USER']= $user['CIVILITE_USER'];
            $_SESSION['NOM_USER']= $user['NOM_USER'];
            $_SESSION['PHOTO_USER']= $user['PHOTO_USER'];
            $_SESSION['PRENOM_USER']= $user['PRENOM_USER'];
            $_SESSION['EMAIL_USER']= $user['EMAIL_USER'];
            $_SESSION['PROFIL_USER']= $user['PROFIL_USER'];
            
           
            $pwduser = sha1($password);
           // echo $username.'-'.$pwduser.'--'.$user['login_user'].'--@'.$user['password_user']; exit();
            if(isset($user) && $user['LOGIN_USER']==$username && $user['PASSWORD_USER']==$pwduser){
               // if($user['login_user']=='dev'){ $_SESSION['PROFIL']=2;} else { $_SESSION['PROFIL']=1; }
                $_SESSION['PROFIL']=profiluser($user['LOGIN_USER']);

                $_SESSION['no_cnx']=0;

                if($_SESSION['PROFIL_USER']==7  ){ redirect('rap_inspection');}
                elseif($_SESSION['PROFIL_USER']==8  ){ redirect('liste_reevaluation'); }
                elseif($_SESSION['PROFIL_USER']==9  ){ redirect('liste_audit');}
                elseif($_SESSION['PROFIL_USER']==10  ){ redirect('liste_conforme');}
                else{
                redirect('liste_tc');
                }
            }               
            else{
                $message = '<div class="col-md-12 alert alert-info" style="background: #a1c1e7;">
                            <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                             <strong>Oups !! </strong>login ou mot de passe incorrect   
                            </div>'; 
                $_SESSION['no_cnx']+=1;
                if($_SESSION['no_cnx']>3){ $no_cnx = '<div class="col-md-12 alert alert-danger" >
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                     Contacter un administrateur, votre compte risque d\'etre suspendu   
                    </div>';   }
            }
        }
    }
}





?>