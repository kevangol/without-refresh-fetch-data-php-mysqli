<?php 
include('db.php');
$q = "select * from users";
$qr = mysqli_query($cn,$q);
?>
<table border="1">
<?php
while($k1 = mysqli_fetch_array($qr)){
    ?>
    <tr>
    <td><?php  echo $k1[1]; ?></td>
    <td><button>DELETE</button></td>
    <td><button>FOLLOW</button></td>
    <td><button>BLOCK</button></td>
    <td><button>DND</button></td>
    <td><button>CALL NOW</button></td>
    <td><button>WHATSAPP</button></td>
    <td><button>MESSAGE</button></td>
    </tr>
    <?php
}
?>
</table>
<script type="text/javascript">
 function Hello(x){
        alert('Hii'+x);
    }
</script>