<?php require_once '_partials/header.php';?>

    <h1 class="text-center p-5 fw-bold"> TO DO LIST</h1>
    <select name="order" id="order">
        <option value="default">Trier les tâches par :</option>
        <option value="asc">Ordre croissant</option>
        <option value="desc">Ordre décroissant</option>


    </select>
    <div>
        <form action="" method='post'>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tâche en cours</th>
                        <th>Modifier</th>
                        <th>A finir pour le : </th>
                        <th>Statut </th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($articles as $article) :; ?>
                            <td><input class="form-check-input" type="checkbox" name="check[]" value="<?= $article['id']; $id = $article["id"];  ?>"></td>
                            <td><?php echo $article['name']; ?> </td>
                            <td class> <a href="./edit.php?id=<?= $id ?>">Modifier</a> </td>
                            <td> <?php echo $article['to_do_at']  ?></td>
                            <td> <?php if (strtotime($article['to_do_at']) <= $date) {
                                        echo "<span class='btn btn-danger'>En retard</span>";
                                    } else {
                                        echo "<span class='btn btn-success'>Encore dans les temps</span>";
                                    } ?>
                            </td>
                    </tr>
                <?php
                        endforeach; ?>
                </tbody>
                <div class="text-center m-3">

<a href="./add.php"><button type="button" class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">Ajouter une tâche</button></a>
<button type="submit" class="btn btn-danger" data-bs-toggle="button" name="delete" aria-pressed="false">Supprimer une tâche</button>
<button type="submit" class="btn btn-success" data-bs-toggle="button" name="finish" aria-pressed="false" autocomplete="off">Finir la tâche</button>
</div>  
            </table>
       

        </form>
    </div>






<script>
    const orderOption = document.getElementById('order');
    orderOption.addEventListener('change', () => {

        let url = new URL(window.location.href);
        url.searchParams.set('order', orderOption.value);
        window.location.href = url.href;

    })

    const pagination_links = document.querySelectorAll('.page-link_action')

    pagination_links.forEach((pagination_link) => {

        pagination_link.addEventListener('click', (e) => {

            e.preventDefault();
            const page_number = pagination_link.getAttribute('data-page-number')
            console.log(page_number);
            let url = new URL(window.location.href);
            url.searchParams.set('page', page_number);
            window.location.href = url.href;
        })
    })
</script>
<?php
unset($pdo);
require_once '_partials/footer.php'; ?>