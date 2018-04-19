<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div class="container">
    <div class="row">
        <h3>Danh sach album</h3>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>anh</th>
            <th>ten</th>
            <th>casi</th>
            <th>theloai</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($list_album as $album) { ?>    
          <tr>
            <td><?php echo increment_once($index); ?></td>
            <td><?php echo $album->anh; ?></td>
            <td><?php echo $album->ten; ?></td>
            <?php 
            $arr = (array) $list_casi;
            foreach ($arr as $key => $value) {
                $casi = (array) $value;
                if ($casi['id'] == $album->casi_id)   
                   echo '<td> '. $casi['ten'] .' </td>';
            }
           
            ?>
            <?php 
            $arr = (array) $list_theloai;
            foreach ($arr as $key => $value) {
                $theloai = (array) $value;
                if ($theloai['id'] == $album->theloai_id)   
                   echo '<td> '. $theloai['ten'] .' </td>';
            }
           
            ?>

            <td><a href="admin.php?c=album&a=edit&id=<?php echo $album->id; ?>">Edit</a></td>
            <td><a href="admin.php?c=album&a=delete&id=<?php echo $album->id; ?>">Delete</a</td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>