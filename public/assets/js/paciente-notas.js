document.addEventListener('DOMContentLoaded',function(){

const modal = new bootstrap.Modal(document.getElementById('noteModal'));

const newNoteBtn = document.getElementById('newNoteBtn');
const saveNoteBtn = document.getElementById('saveNoteBtn');

const noteDate = document.getElementById('noteDate');
const noteText = document.getElementById('noteText');

const timeline = document.getElementById('notesTimeline');

newNoteBtn.addEventListener('click',function(){
modal.show();
});

saveNoteBtn.addEventListener('click',function(){

const date = noteDate.value;
const text = noteText.value.trim();

if(!date || !text){
alert('Completa la fecha y la nota');
return;
}

const formattedDate = new Date(date).toLocaleDateString('es-MX',{
day:'2-digit',
month:'long',
year:'numeric'
});

const card = document.createElement('div');

card.className='note-card';

card.innerHTML=`

<div class="note-date">
${formattedDate}
</div>

<div class="note-text">
${text}
</div>

`;

timeline.prepend(card);

noteDate.value='';
noteText.value='';

modal.hide();

});

});