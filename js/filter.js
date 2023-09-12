$(document).ready(function(){
var action = '';
filter_data();
var choice;
     
function filter_data()
{   
$('.filter_data').html('<div id="loading" ></div>');
/* var minimum_price = $('#hidden_minimum_price').val();
var maximum_price = $('#hidden_maximum_price').val();*/
var gpu = get_filter('gpu');
var storage = get_filter('storage');
var memory = get_filter('memory');
var cpu = get_filter('cpu');
var mobo = get_filter('mobo');
var psu = get_filter('psu');
var cases = get_filter('cases');
$.ajax({
url:'php/fetch_data.php',
method:'POST',
data:{action:action, gpu:gpu,  storage:storage, memory:memory, cpu:cpu, mobo:mobo, psu:psu, cases:cases},
success:function(data){
$('.filter_data').html(data);
}
});
}

function get_filter(class_name) 
{   
var id; 
var counter = 0;
var filter = {}; // initialize a filter object
$('.'+class_name+':checked').each(function(){
id  = $(this).attr('id'); // store the id of the checkbox
 
filter[id+counter] = $(this).val(); // store the value of the checkbox as a value with the key of its id concatenated with counter
//filter.push($(this).val());
counter++; // increment counter
});
 
if(class_name == 'gpu' && counter > 0) {
action = 'gpu';
}
else if(class_name == 'storage' && counter > 0) {
action = 'storage';
}
else if(class_name == 'memory' && counter > 0) {
action = 'memory';
}
else if(class_name == 'cpu' && counter > 0) {
action = 'cpu';
}
else if(class_name == 'mobo' && counter > 0) {
action = 'mobo';
}
else if(class_name == 'cases' && counter > 0) {
action = 'cases';
}
else if(class_name == 'psu' && counter > 0) {
action = 'psu';
}
       
counter = 0;
return filter;
}

$('.common_selector').click(function(){
filter_data();
});

$('#price_range').slider({
range:true,
min:1000,
max:65000,
values:[1000, 65000],
step:500,
stop:function(event, ui)
{
$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
$('#hidden_minimum_price').val(ui.values[0]);
$('#hidden_maximum_price').val(ui.values[1]);
filter_data();
}
});

});