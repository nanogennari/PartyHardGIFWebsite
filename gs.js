var reloading;

function reload() {
  var url = window.location.protocol + '//' + window.location.hostname + window.location.pathname + window.location.hash;
  if (url == window.location) {
  	window.location.reload();
  } else {
    window.open(url,"_self");
  }
}

function checkReloading() {
  if (window.location.hash=="#autoreload") {
    reloading=setTimeout("reload();", 30000);
    document.getElementById("reloadCB").checked=true;
  }
}

function toggleAutoRefresh(cb) {
  if (cb.checked) {
    reloading=setTimeout("reload();", 30000);
    window.location.replace('#autoreload');
  } else {
    window.location.replace("#");
    clearTimeout(reloading);
  }
}

window.onload=checkReloading;
