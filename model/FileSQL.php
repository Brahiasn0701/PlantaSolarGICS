<?php

class FileSQL{
    
    const  INSERT_TABLE_INT_ANA="INSERT INTO int_ana (INT_ANA_Uhrzeit,
                                                      INT_ANA_Intervall,
                                                      INT_ANA_W_V0,
                                                      INT_ANA_G_M0,
                                                      INT_ANA_T_U0,
                                                      INT_ANA_T_M0,
                                                      INT_ANA_T_M13,
                                                      INT_ANA_T_M14,
                                                      INT_ANA_T_M15)VALUES(?,?,?,?,?,?,?,?,?)";
    
    const INSERT_TABLE_INT_KWR = "INSERT INTO int_kwr (INT_KWR_DATE, 
                                                        INT_KWR_TIME, 
                                                        INT_KWR_S, 
                                                        INT_KWR_TECHNOLOGY, 
                                                        INT_KWR_KPC, 
                                                        INT_KWR_U_DC_V,
                                                         INT_KWR_I_DC_A, 
                                                         INT_KWR_P_DC_W, 
                                                         INT_KWR_U_AC_V, 
                                                         INT_KWR_I_AC_A, 
                                                         INT_KWR_P_AC_W) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
}