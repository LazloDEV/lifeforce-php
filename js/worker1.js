let counter = 0;

function timedCount() {
  counter += 1;
  postMessage(counter);
  setTimeout("timedCount()",500);
}

timedCount();