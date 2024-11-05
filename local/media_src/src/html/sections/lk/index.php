<? 
    $includeLkSection = $_REQUEST['section'];

    if ( $includeLkSection ) {
        include('sections/lk/include/'.$includeLkSection.'.php');
    } else {
        include('sections/lk/include/info.php');
    };
?>