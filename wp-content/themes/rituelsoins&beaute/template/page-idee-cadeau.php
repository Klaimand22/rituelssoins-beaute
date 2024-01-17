<?php /* Template Name: Idee cadeau */
get_header();
?>

<h1 class="title-page">Idées Cadeaux</h1>


<h2 class="subtitle-page">Offrez un moment de détente à vos proches !</h2>

<div class="gift-banner">
    <div class="banner">
        <img src="https://picsum.photos/1920/1900" alt="">
    </div>
    <div class="description">
        <div class="title">
            <h3>
                En manque d'idées cadeaux ? 
                Offrez une pause bien-être !</h3>
        </div>
        <div class="text">
            <p> Nous vous proposons des bons cadeaux valables 8 mois, pour faire plaisir à vos proches.</p>
            <p>
                Les bons cadeaux sont disponibles sur la boutique en ligne offrant la possibilité de les personnaliser
                et les imprimer depuis chez vous. Vous pouvez également venir les récupérer directement à l’institut.
            </p>
        </div>
    </div>
</div>

<div class="left-text container">
    <h3>
        Nos suggestions
    </h3>
</div>

<?php foreach (get_field('description-container') as $i => $description_container) :

    // make alternate css class for spreadsheet if modulo 2 == 0
    $class = ($i % 2 == 0) ? 'container-even' : 'container-odd';

?>
<div class="container-beaute">
    <div class="left">
        <img class="img-beaute" src="<?php echo $description_container['image']['url']; ?>" alt="" srcset="">
    </div>
    <div class="right">
        <div class="price">
            <h3 class="text-onglerie"><?php echo $description_container['title']; ?></h3>
        </div>
        <div class="description">
            <p><?php echo $description_container['description']; ?></p>
        </div>
    </div>
</div>
<?php endforeach; ?>



<div class="left-text container">
    <h3>
        Bons cadeaux
    </h3>

    <p>Sur la boutique en ligne, vous pourrez personnaliser et imprimer les bons cadeaux depuis chez vous.</p>
</div>



<div class="border-solid">
    <div class="left-text container info-gift">
        <p>Pour plus d’informations, n’hésitez pas à nous contacter. </p>
        <p>Pour le respect de nos clients, l'institut est fermé pendant les soins, pensez à appeler avant de venir
            chercher
            vos bons cadeaux.
            Si vous avez des questions, hésitations ou plusieurs bons cadeaux à offrir veuillez prendre rendez-vous
            afin
            que
            nous ayons le temps de vous conseiller et aussi que nous évitons de faire patienter nos clients en
            cabine.
        </p>
    </div>
    <div class="right-text container">
        <h3>
            Merci pour votre compréhension !
        </h3>
    </div>
</div>