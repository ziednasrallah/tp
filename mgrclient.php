<html>
<body>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom
                    <th>date de naissane</th>
                    <th></th>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php
            include 'classes/client.class.php';
            $client = new Client;
            $listClients =$client->readAllClients();
            while $data = $listClients->fetch ()
            {?>
            <tr>
                    <td><?=$data['id']?></td>
                    <td><?=$data['firstname']?></td>
                    <td><?=$data['lastname']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['tel']?></td>
                           
            </tr>
            <?php }   

             $listClients =$client->deleteClients();
            while $data = $listClients->fetch ()
            {?>
            <tr>
                    <td><?=$data['id']?></td>
                    <td><?=$data['firstname']?></td>
                    <td><?=$data['lastname']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['phone']?></td>
                           
            </tr>
            <?php } ?>   




          </tbody>   


</body>




    </html>