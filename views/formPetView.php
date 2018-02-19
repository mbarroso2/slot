                <input type="hidden" id="id_pet" name="id_pet" value="<?php echo $pet->getId()?$pet->getId():""; ?>">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Escribe un nombre..." required value="<?php echo $pet->getName()?$pet->getName():""; ?>">
                </div>
                <div class="form-group">
                    <label for="specie">Especie:</label>
                    <select id="specie" name="specie" >
                        <?php 
                        foreach ($species as $clave => $valor){
                            $sel="";
                            if ($pet->getIdSpecie()==$clave)
                                   $sel='selected="selected"';
                             echo '<option value="'.$clave.'" '.$sel.'">'.$valor.'</option>';
                        }
                            
                        
                        ?>
                    </select>
                </div>
                 <div class="form-group">
                    <label for="sex">Especie:</label>
                    <select id="sex" name="sex" >
                        <option value="f" <?php echo ($pet->getSexName()=='f')?'selected="selected"':''; ?>>hembra</option>
                        <option value="m" <?php echo ($pet->getSexName()=='m')?'selected="selected"':''; ?>>macho</option>    
                    </select>
                </div>   
                 <div class="form-group">
                    <label for="birth_date">Fecha de nacimiento:</label>
                    <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="Formato YYYY-mm-dd..." required value="<?php echo $pet->getBirthDate()?$pet->getBirthDate():""; ?>">
                </div>
                <div class="form-group">
                    <label for="deadh_date">Fecha de fallecimiento:</label>
                    <input type="text" class="form-control" id="deadh_date" name="deadh_date" placeholder="Formato YYYY-mm-dd..." value="<?php echo $pet->getDeadhDate()?$pet->getDeadhDate():""; ?>">
                </div>
                
                
                <div class="form-group">
                    <label for="observation">observacion:</label>
                    <textarea class="form-control" rows="5" id="observation" name="observation"><?php echo $pet->getObservation()?$pet->getObservation():""; ?></textarea>
                  </div>     