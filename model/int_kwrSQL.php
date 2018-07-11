<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class int_kwrSQL{
    
    
    const INSERT_NEW_REGISTER ="INSERT INTO int_kwr (INT_KWR_DATE,               
                                                     INT_KWR_TIME,
                                                     INT_KWR_S,
                                                     INT_KWR_TECHNOLOGY,
                                                     INT_KWR_KPC,
                                                     INT_KWR_U_DC_V,
                                                     INT_KWR_I_DC_A,
                                                     INT_KWR_P_DC_W,
                                                     INT_KWR_U_AC_V,
                                                     INT_KWR_I_AC_A,
                                                     INT_KWR_P_AC_W)VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    const QUERY_ALL_REGISTER="SELECT * FROM int_kwr ORDER BY INT_KWR_ID ASC";
    const UPDATE_REGISTER="";
    const DELETE_REGISTER="DELETE FROM int_kwr WHERE INT_KWR_ID= ?";
    const QUERY_TECHNOLOGIES="SELECT * FROM technologies";
    
}


