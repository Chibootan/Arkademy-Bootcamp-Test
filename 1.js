function myBiodata(biodata){
  let biodataObj = {
    "name": 'Ribut Ocktafiani',
    "age" : 22
    "address": 'Jakarta Timur',
    "hobbies": [
      'Ngoding', 'Browsing', 'Listening music', 'Gaming' 
    ],
    "is_married": false,
    "school": {
      "University": 'Universitas Gunadarma',
      "Year in": '2014',
      "Year out" : "2019",
      "Major" : "Sistem Informasi"
    },
    "skill": [
      {
        "HTML5": "90 %",
        "CSS": "80 %",
        "PHP": "50 %",
        "Python": "30 %",
      }
    ]
  }

  return biodataObj
}
console.log(myBiodata('Ockta'));