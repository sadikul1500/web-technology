// Online Javascript Editor for free
// Write, Edit and Run your Javascript code using JS Online Compiler
    
console.log("Welcome to Programiz!");
const output = {
   "1": [],
   "2": [],
   "3": [],
   "4": []
};

const cars = [
  { "name": "Jim's Ford Focus",       "color": "white", "isDamaged": true,  "wheels": 4 },
  { "name": "Bob's Suzuki Swift",     "color": "green", "isDamaged": false, "wheels": 4 },
  { "name": "Alex's Harley Davidson", "color": "black", "isDamaged": false, "wheels": 2 },
  { "name": "Alex's Harley", "color": "black", "isDamaged": false, "wheels": 1 },
  { "name": "Jim's Ford", "color": "black", "isDamaged": false, "wheels": 2 }
];

console.log(output[1]);
console.log(cars[0].color);
for (index = 0; index < cars.length; index++) {
    //console.log(cars[index]);
    if(cars[index].wheels==1)
    {
        output[1].push({"name":cars[index].name,"color":cars[index].color,"isDamaged":cars[index].isDamaged});
    }
    else if(cars[index].wheels==2)
    {
        output[2].push({"name":cars[index].name,"color":cars[index].color,"isDamaged":cars[index].isDamaged});
    }
    else if(cars[index].wheels==3)
    {
        output[3].push({"name":cars[index].name,"color":cars[index].color,"isDamaged":cars[index].isDamaged});
    }
    else if(cars[index].wheels==4)
    {
        output[4].push({"name":cars[index].name,"color":cars[index].color,"isDamaged":cars[index].isDamaged});
    }
}
console.log(output)


// Expected Output:
// {
//   "4": [
//     { "name": "Jim's Ford Focus", "color": "white", "isDamaged": true},
//     { "name": "Bob's Suzuki Swift", "color": "green", "isDamaged": false}
//   ],
//   "2": [
//     { "name": "Alex's Harley Davidson", "color": "black", "isDamaged": false},
//     { "name": "Jim's Ford", "color": "black", "isDamaged": false}
//   ],
//   "1": [
//     { "name": "Alex's Harley", "color": "black", "isDamaged": false}
//   ]
// };
