var today = new Date().toISOString().split('T')[0];
document.getElementsByName("data_plecare")[0].setAttribute('min', today);