let myWorker1;
let myWorker2;
const resultText = document.getElementById("result");
const startWorker2 = document.getElementById("startWorker2");
const bgButton = document.getElementById("bgButton");
const stopWorkers = document.getElementById("stopWorkers");
const startWorker1 = document.getElementById("startWorker1");

if (window.Worker) {
	startWorker1.addEventListener("click", (event) => {
		if(typeof(myWorker1) == "undefined") {
			console.log("Starting wroker1");
			myWorker1 = new Worker("js/worker1.js");
		}
		
		myWorker1.onmessage = function(event) {
			console.log(`Message from the wroker: ${event.data}`);
			resultText.innerHTML = event.data;
		};
		
		myWorker1.onerror = function(error) {
			const workerError = `Error Worker1: ${error.message}`;
			console.log(workerError);
			resultText.innerHTML = workerError;
		};
	});

	startWorker2.addEventListener("click", (event) => {
		if(typeof(myWorker2) == "undefined") {
			console.log("Starting wroker2");
			myWorker2 = new Worker("js/worker2.js");
		}
		
		myWorker2.postMessage('Hello Worker');
			
		myWorker2.onmessage = function(message){
			// console.log(message.data);
			alert(`The final sum is ${message.data}`)
		}
	
		myWorker2.onerror = function(error) {
			const workerError = `Error Worker2: ${error.message}`;
			console.log(workerError);
			resultText.innerHTML = workerError;
		};
	});
} else {
	const noSupportMessage = "Error: Sorry! No Web Worker support.";
	console.log(noSupportMessage);
	resultText.innerHTML = noSupportMessage;
}

stopWorkers.addEventListener("click", (event) => {
    if(typeof(myWorker1) !== "undefined") {
		console.log("Stopping wroker1");
		myWorker1.terminate();
		myWorker1 = undefined;
		resultText.innerHTML = "";
	}
    if(typeof(myWorker2) !== "undefined") {
		console.log("Stopping wroker2");
		myWorker2.terminate();
		myWorker2 = undefined;
		resultText.innerHTML = "";
	}
});

bgButton.addEventListener("click", (event) => {
	if(document.body.style.background !== "green") {
		console.log(document.body.style.background);
		document.body.style.background = "green";
	} else {
		console.log(document.body.style.background);
		document.body.style.background = "blue";
	}
});
