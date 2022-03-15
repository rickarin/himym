<?php include ('header.php');
        require_once "banco-de-dados\banco-de-dados-data.php"?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/Rectangle 2.png" alt="" class="temporada__img">
        </div>
        <div class="col-md-4 titulo">
            Quantidade de visualizações
        </div>
    </div>
<div class="accordion" id="">
 <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Temporada 1
    </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season1 as $value) : ?>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Temporada 2
    </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season2 as $value) : ?>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Temporada 3
    </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season3 as $value) : ?>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Temporada 4
    </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season3 as $value) : ?>
                <tr>
                  <td>
                    4
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Temporada 5
    </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season3 as $value) : ?>
                <tr>
                  <td>
                    5
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Temporada 6
    </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season3 as $value) : ?>
                <tr>
                  <td>
                    6
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Temporada 7
    </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <table>
            <thead>
                <tr>
                    <th>temporada</th>
                    <th>número</th>
                    <th>episódio</th>
                    <th>visualizações</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($season3 as $value) : ?>
                <tr>
                  <td>
                    7
                  </td>
                  <td>
                    <?php echo $value['num_in_season'] ; ?> 
                    </td>
                    <td>
                    <?php echo $value['title']; ?>
                    </td>
                    <td>
                    <?php echo $value['us_viewers']; ?>
                    </td>
                    </tr>
                    <?php endforeach;  ?>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include ('footer.php');?>
