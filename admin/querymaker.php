<?php
/*
 *@note database query makar for CURD
 * @dev sam
 * @version V18
 * 
 */

class menumaker {

    



            function mainmenumaker($mainmenu){


                $exe=  exequery();

                $sql="SELECT COUNT(*)  FROM main_menu WHERE menu_name='$mainmenu' ";
                $res = $exe->query($sql);
                $data_exists = ($res->fetchColumn() > 0) ? true : false;



            if($data_exists==FALSE): 

                    $stmt = $exe->prepare("INSERT INTO main_menu (id, menu_name) VALUES (:id, :menu_name)");

                    $param = array('id'=>NULL , 'menu_name'=>$mainmenu );

                    $stmt->execute($param);

                    return TRUE;

            else:

                return FALSE;



            endif;



            }
            
            function submenumaker($mainid,$submenu){
                
                
                
                $exe=  exequery();

                $sql="SELECT COUNT(*)  FROM submenu WHERE menu_name='$submenu' AND main_id='$mainid' ";
                $res = $exe->query($sql);
                $data_exists = ($res->fetchColumn() > 0) ? true : false;



            if($data_exists==FALSE): 

                    $stmt = $exe->prepare("INSERT INTO submenu (id,main_id,menu_name) VALUES (:id,:mainid ,:menu_name)");

                    $param = array('id'=>NULL ,'mainid'=>$mainid,'menu_name'=>$submenu );

                    $stmt->execute($param);

                    return TRUE;

            else:

                return FALSE;



            endif;

                
                
                
                
                
                
            }
            
            function getmainmenu() {
                
                                $exe=  exequery();

                                $stmt= $exe->prepare('SELECT * FROM main_menu');
                                $stmt->execute();
                                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                       
                                return $data;
                                   
                                
            }
            
            
            
            
            

}