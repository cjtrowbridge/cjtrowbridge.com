/*

	This is my Talk api for making apps say things.
	
	Create dom objects with text in the custom tag <say></say>, then call Talk(); 
	It will say each thing only once, and then add a class to show that it has already been said.
	
	Or Call Say(); to say a string.

*/

function Talk(){
	$("say:not(.done_saying)").each(function(index){
		$(this).addClass('done_saying');
		var say=$(this).text();
		Say(say);
	});
}
function Say(words){
	console.log('Saying: '+words);
	var msg = new SpeechSynthesisUtterance();
	var voices = window.speechSynthesis.getVoices();
	msg.voice = voices[10]; // Note: some voices don't support altering params
	msg.voiceURI = 'native';
	msg.volume = 1; // 0 to 1
	msg.rate = 1; // 0.1 to 10
	msg.pitch = 1; //0 to 2
	msg.text = words;
	msg.lang = 'en-US';

	msg.onend = function(e) {
	  console.log('Finished in ' + event.elapsedTime + ' seconds.');
	};

	speechSynthesis.speak(msg);
}