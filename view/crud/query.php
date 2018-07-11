<div class="container">
    <br><br><br><br>
    <div class="col-md-4">
        <?php require_once 'view/dashboard/Sidebar-left.php'; ?>
    </div>
    <div class="col-md-8">
        <div class="form-group">
                <label for="table">TABLE:</label>
                <select class="form-control" id="table" name="table">
                    <option value="int_kwr" selected="">int_kwr</option>
                </select>
            </div>
        <table class="table table-condensed table-bordered table-striped">
            <tr style="font-size: 12px">
                <th>DATE</th>
                <th>TIME</th>
                <th>S</th>
                <th>TECHNOLOGY</th>
                <th>KPC</th>
                <th>U_DC_V</th>
                <th>I_DC_A</th>
                <th>P_DC_W</th>
                <th>U_AC_V</th>
                <th>I_AC_A</th>
                <th>P_AC_W</th>
                <th colspan="2" class="text-center">Crud</th>
                
            </tr>
            
           <?php 
            foreach ($this->model_int_kwr->QueryRegisters() as $QueryRegisters){
                ?>
            <tr style="font-size: 12px">
                <td><?php echo $QueryRegisters->INT_KWR_DATE;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_TIME;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_S;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_TECHNOLOGY;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_KPC;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_U_DC_V;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_I_DC_A;?></td>
                <td><?php echo $QueryRegisters->INT_KWR_P_DC_W; ?></td>
                <td><?php echo $QueryRegisters->INT_KWR_U_AC_V; ?></td>
                <td><?php echo $QueryRegisters->INT_KWR_I_AC_A; ?></td>
                <td><?php echo $QueryRegisters->INT_KWR_P_AC_W; ?></td>
                <td><button class="btn btn-warning btn-xs" title="Modificar"><span class="fa fa-edit"></span></button></td>
                <td><button class="btn btn-danger btn-xs" value="<?php echo $QueryRegisters->INT_KWR_ID; ?>" title="Eliminar" onclick="var r = confirm('ESTA SEGURO QUE DESEA ELIMINAR EL REGISTRO PERMANENTEMENTE ?');if (r == true) {DeleteRegister(this.value);} else {}"><span class="fa fa-trash-o"></span></button></td>

            </tr>
            <?php
            
            }
           ?>
        </table>
    </div>
</div>