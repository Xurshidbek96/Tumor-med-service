var mList = {
  Andijon: [
    "Andijon tumani",
    "Asaka tumani ",
    "Baliqchi tumani ",
    "Boʻston tumani ",
    "Buloqboshi tumani ",
    "Izboskan tumani ",
    "Jalaquduq tumani ",
    "Marhamat tumani ",
    "Oltinkoʻl tumani ",
    "Paxtaobod tumani ",
    "Shahrixon tumani ",
    "Ulugʻnor tumani ",
    "Xoʻjaobod tumani ",
    "Qoʻrgʻontepa tumani ",
  ],
  Namangan: [
    "Namangan tumani",
    "Chortoq tumani",
    "Kosonsoy tumani",
    "Mingbuloq tumani",
    "Norin tumani",
    "Pop tumani",
    "Toʻraqoʻrgʻon tumani",
    "Uchqoʻrgʻon tumani",
    "Uychi tumani",
    "Yangiqoʻrgʻon tumani",
    "Davlatobod tumani",
  ],
  Fargona: [
    "Oltiariq tumani",
    "Bagʻdod tumani",
    "Beshariq tumani",
    "Buvayda tumani",
    "Dangʻara tumani",
    "Fargʻona tumani",
    "Furqat tumani",
    "Qoʻshtepa tumani",
    "Quva tumani",
    "Rishton tumani",
    "Soʻx tumani",
    "Toshloq tumani",
    "Uchkoʻprik tumani",
    "Oʻzbekiston tumani",
    "Yozyovon tumani",
    "Qo'qon shahar",
  ],
  Toshkent: [
    "Toshkent shahri",
    "Boʻstonliq tumani",
    "Bekobod tumani",
    "Boʻka tumani",
    "Chinoz tumani",
    "Qibray tumani",
    "Ohangaron tumani",
    "Oqqoʻrgʻon tumani",
    "Parkent tumani",
    "Piskent tumani",
    "Quyi chirchiq tumani",
    "Oʻrta chirchiq tumani",
    "Yuqori Chirchiq tumani",
    "Zangiota tumani",
  ],
  Samarqand: [
    "Bulungʻur tumani",
    "Ishtixon tumani",
    "Jomboy tumani",
    "Kattaqoʻrgʻon tumani",
    "Qoʻshrabot tumani",
    "Narpay tumani",
    "Nurobod tumani",
    "Oqdaryo tumani",
    "Paxtachi tumani",
    "Payariq tumani",
    "Pastdargʻom tumani",
    "Samarqand tumani",
    "Toyloq tumani",
    "Urgut tumani",
  ],
  Surxondaryo : [
    "Angor tumani",
    "Bandixon tumani",
    "Boysun tumani",
    "Denov tumani",
    "Jarqo'rg'on tumani",
    "Qiziriq tumani",
    "Qumqo'rg'on tumani",
    "Muzrabod tumani",
    "Oltinsoy tumani",
    "Sariosiyo tumani",
    "Sho'rchi tumani",
    "Termiz tumani",
    "Uzun tumani",
  ],
  Buxoro : [
    "Buxoro tumani",
    "Olot tumani",
    "Gʻijduvon tumani",
    "Jondor tumani",
    "Kogon tumani",
    "Qorakoʻl tumani",
    "Qorovulbozor tumani",
    "Peshku tumani",
    "Romitan tumani",
    "Shofirkon tumani",
    "Vobkent tumani",
  ],
  Jizzax : [
    "Arnasoy tumani",
    "Baxmal tumani",
    "Doʻstlik tumani",
    "Forish tumani",
    "Gʻallaorol tumani",
    "Sharof tumani",
    "Mirzachoʻl tumani",
    "Paxtakor tumani",
    "Yangiobod tumani",
    "Zomin tumani",
    "Zafarobod tumani",
    "Zarbdor tumani",
  ],
  Xorazm : [
    "Urganch tumani",
    "Hazorasp tumani",
    "Xonqa tumani",
    "Qoʻshkoʻpir tumani",
    "Shovot tumani",
    "Bogʻot tumani",
    "Gurlan tumani",
    "Xiva tumani",
    "Yangiariq tumani",
    "Xiva tumani",
    "Yangibozor tumani",
    "Tuproqqal’a tumani",
   
  ],
  Navoiy : [
    "Konimex tumani",
    "Karmana tumani",
    "Qiziltepa tumani",
    "Xatirchi tumani",
    "Navbahor tumani",
    "Nurota tumani",
    "Tomdi tumani",
    "Uchquduq tumani",
  ],
  Qashqadaryo : [
    "Chiroqchi tumani",
    "Dehqonobod tumani",
    "G'uzor tumani",
    "Kasbi tumani",
    "Kitob tumani",
    "Koson tumani",
    "Mirishkor tumani",
    "Muborak tumani",
    "Nishon tumani",
    "Qamashi tumani",
    "Qarshi tumani",
    "Shahrisabz tumani",
    "Yakkabog' tumani",
  
  ],
  Sirdaryo : [
    "Oqoltin tumani",
    "Boyovut tumani",
    "Guliston tumani",
    "Xovos tumani",
    "Mirzaobod tumani",
    "Sardoba tumani",
    "Sayxunobod tumani",
    "Sirdaryo tumani",
  
  ],

};

el_parent = document.getElementById("parent_select"); //parent select element
el_child = document.getElementById("child_select"); //child select element

for (key in mList) {
  //populate the parent select element with array key
  el_parent.innerHTML = el_parent.innerHTML + "<option>" + key + "</option>";
}

//add event listener to parent select, so that when user selects an option, child gets populated
el_parent.addEventListener("change", function populate_child(e) {
  el_child.innerHTML = "";
  itm = e.target.value;
  if (itm in mList) {
    for (i = 0; i < mList[itm].length; i++) {
      el_child.innerHTML =
        el_child.innerHTML + "<option>" + mList[itm][i] + "</option>";
    }
  }
});




// chart js

