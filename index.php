<?php
$faq = [
   [
      'title' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
      'content' => [
         'La recente <a href="#">decisione della Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',
         'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.',
         'Per presentare una richiesta di rimozione, compila questo <a href="#">modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.',
         'Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.',
         'Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.',
      ],
   ],
   [
      'title' => 'Perché il mio account è associato a un paese?',
      'content' => [
         'Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:',
         [
            [
               'l_title' => 'La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:',
               'l_content' => ['Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.', 'Google LLC, con sede negli Stati Uniti, per il resto del mondo.']
            ],
            [
               'l_title' => 'La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.',
               'l_content' => null,
            ]
         ],
         'Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.',
      ],
   ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP-Google-FAQ</title>
</head>

<body>
   <!-- HEADER -->
   <header></header>
   <!-- MAIN -->
   <main>
      <?php foreach ($faq as $section) : ?>
         <div class="section">
            <h2><?= $section['title'] ?></h2>
            <?php foreach ($section['content'] as $text) : ?>
               <?php if (!is_array($text)) : ?>
                  <p><?= $text ?></p>
               <?php elseif (is_array($text)) : ?>
                  <ol>
                     <?php foreach ($text as $list) : ?>
                        <li>
                           <?= $list['l_title'] ?>
                           <?php if (!empty($list['l_content'])) : ?>
                              <ul>
                                 <?php foreach ($list['l_content'] as $list_content) : ?>
                                    <li>
                                       <?= $list_content ?>
                                    </li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                        </li>
                     <?php endforeach; ?>
                  </ol>
               <?php endif; ?>
            <?php endforeach; ?>
         </div>
      <?php endforeach; ?>
   </main>
   <!-- FOOTER -->
   <footer></footer>
</body>

</html>