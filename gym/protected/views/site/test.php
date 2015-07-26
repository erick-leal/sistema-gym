


<?php
$main = new JamVertPanel();
$topbar = new JamHorzPanel();
$bottombar = new JamHorzPanel();
$bodybar = new JamHorzPanel();
$panel1 = new JamVertPanel();
$panel2 = new JamVertPanel();
$panel3 = new JamVertPanel();

// basic layout

$main->add($topbar);
$main->add($bodybar);
$main->add($bottombar);

$bodybar->add($panel1);
$bodybar->add($panel2);
$bodybar->add($panel3);

// stylish

$main->setAutoMargin();
$main->setWidth('90%');

$topbar->setWidth('auto');
$topbar->addHtmlOption('style','background-color: darkred; color: white;');
$topbar->setBorderNone();
$topbar->addChildHtmlOptions(array(
    'style'=>'margin-right: 20px;padding: 3px;border: none;'));
$topbar->add("item 1");
$topbar->add("item 2");
$topbar->add("item 3");
$topbar->add("item 4");

$bodybar->addHtmlOption('style','background-color: #fec;');
$bodybar->setWidth('auto');

$panel1->addHtmlOption('style','background-color: #eee');
$panel1->setWidth('150px');
$panel1->setHeight('200px');
$panel1->add("panel 1 text content");

$panel2->setWidth('auto');
$panel2->add('content for panel 2');
$panel2->setHeight('200px');

$panel3->setWidth('auto');
$panel3->add('content for panel 3');
$panel3->setHeight('200px');

$bottombar->add('this is the bottom bar, you can insert more panels here');
$bottombar->addHtmlOption('style','background-color: #eee;');

$main->render();
?>

<?php
$table = new JamTable();
$table->setWidth('300px');
$table->setSolidBorder('3px','#def');
$table->head(
    array(
        array('text'=>'col 1',
            'htmlOptions'=>array('style'=>'background-color: #eee')),
        'any col',
        array('text'=>'price',
            'htmlOptions'=>array('style'=>'text-align: right')),
    )
    ,array('style'=>'border: none;')
);
for($i=0;$i<3;$i++)
    $table->row(array(
        array('text'=>'abc'.$i,
        'htmlOptions'=>array('style'=>'background-color: #eee;border: none;')),
        'some text',
        array('text'=>'123.00',
            'htmlOptions'=>array('style'=>'text-align: right')),
    ));
$table->render();
?>

<?php
$form = new JamVertPanel('form'); // creates a 'form', instead of default 'div'
$allLabels = array();

// standard input
$label = $form->add(new JamElement('label','Your Name:'));
$label->setHtmlOption('for','firstname');
$allLabels[] = $label;
$firstname = $form->add(new JamElement('input'));
$firstname->setId('firstname');

// a Radio Buttons
$label = $form->add(new JamElement('label','Gender:'));
$radio = $form->add(new JamHorzRadioButtons('gender'));
$radio->add('Male');
$radio->add('Female');
$allLabels[] = $label;

// checkboxes
$label = $form->add(new JamElement('label','Do you like Jamboree ?'));
$checkbox = $form->add(new JamElement('input'));
$checkbox->setHtmlOption('type','checkbox');
$checkbox->setHtmlOption('checked','checked');
$allLabels[] = $label;

$bottomPanel = new JamHorzPanel();
$bottomPanel->setBgColor('#def');
$submit = $bottomPanel->add(new JamElement('input'));
$submit->setHtmlOption('type','submit');
$submit->setHtmlOption('value','Send');

$form->add($bottomPanel);

foreach($allLabels as $label){
    $label->setColor('darkred');
    $label->addHtmlOption('style','font-weight: bold;');
}

$form->setId('myform');
$form->setHtmlOption('method','post');
$form->setHtmlOption('action',CHtml::normalizeUrl(array('/site/test')));
$form->setWidth('200px');

$form->render();

?>

<?php
$mainpanel = new JamVertPanel();
$mainpanel->addHtmlOption('style','width: 500px;');

$title  = new JamElement("h1","My Title");
$panel1 = new JamHorzPanel();
$panel2 = new JamHorzPanel();

$mainpanel->add($title);
$mainpanel->add($panel1);
$mainpanel->add($panel2);

$lpanel = new JamVertPanel();
$panel1->add($lpanel);
$panel1->add('large text here');

$lpanel->add(new JamImage('images/sample1.png'));
$lpanel->add(CHtml::textArea('text at left built using CHtml','demo text'));

// styles applied to child elements when calling the 'add' method.
$panel2->addChildHtmlOptions(array(
  'style'=>'border: 3px solid gray; width: 150px; height: 100px; text-align: center; margin: 3px;'));
$panel2->add(new JamElement("b","bold text"));
$panel2->add(CHtml::image('images/sample2.png'));
$panel2->add("simple raw text");

// calling 'render' without any argument will echo the result, 
// in order to return the output please use $mainpanel->render(false);
$mainpanel->render();
?>