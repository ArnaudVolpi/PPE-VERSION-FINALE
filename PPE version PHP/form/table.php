 <?php
if (isset($connexion)){

}else{
    include_once('../include/connection.php');
}
$res = $connexion->query('SELECT * FROM club ORDER BY NUM_CLUB');

?>
 
 
 <!--Table-->
 <table class="table table-hover table-responsive-md table-fixed">
        
        <!--Table head-->
        <thead class="stylish-color">
            <tr class="text-white ">
                <th>Numéro Club</th>
                <th>Nom Club</th>
                <th>Col 2</th>
                <th>Col 3</th>
                <th>Col 4</th>
                <th>Col 5</th>
                <th>Col 6</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
    
<?php
while ($data = $res->fetch()) {
    $frm="EditDeleteAction".htmlspecialchars($data['NUM_CLUB']);
    ?>
            <tr class="table-bordered">
            <form  action="form/EditDeleteAction.php" id="<?= htmlspecialchars($frm) ?>" method="post" >
            <td> <input type="text" id="numClub" name="numClub" placeholder="<?= htmlspecialchars($data['NUM_CLUB']) ?>" value="<?= htmlspecialchars($data['NUM_CLUB']) ?>"></td>
                <td> <input type="text" id="nomClub" name="nomClub" placeholder="<?= htmlspecialchars($data['NOM_CLUB']) ?>" value="<?= htmlspecialchars($data['NOM_CLUB']) ?>"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td class="text-center ">
                    <button  type="submit" value='' onclick="submitForm2(<?= htmlspecialchars($frm) ?>,event,'Update')"><i class="fas fa-edit  "></i> </button>      
                </td>
                <td class="text-center "> 
                    <button  type="submit" value='' onclick="submitForm2(<?= htmlspecialchars($frm) ?>,event,'Delete')"><i class="fas fa-times "></i> </button> 
                </td>
                </form>  
            </tr>
            <?php
        }
        ?>

           <!-- Ajout -->
            <tr class="table-bordered">
            <form  action="form/addAction.php" id="addAction" method="post" onsubmit="submitForm2(this,event)">
                <td> <input type="text" id="numClub" name="numClub"></td>
                <td> <input type="text" id="nomClub" name="nomClub"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td> <input type="text"></td>
                <td colspan="2" class="text-center">
                <button  type="submit"  name="add" value="add"><i class="fas fa-plus "></i> Ajouter </button> 
                </td> 
                </form>  
            </tr>
   
        </tbody>
        <!--Table body-->          
    </table>
    <!--Table-->