var students = [
    {name: 'Nguyen Van A', age: 12},
    {name: 'Huynh Thi B', age: 20},
    {name: 'Ho Thi C', age: 19},
    {name: 'Le Van D', age: 25}
];
console.log("1. Tìm ra danh sách students có tuồi nhỏ hơn 24 trả về array");
var young = (age)=>{
    let arr = [];
    for(let i=0; i < students.length; i++){
        if(students[i].age < age)
            arr.push(students[i]);
    }
    return arr;
};
console.log(young(24)); 

console.log("2. Tìm đến người có tên Huynh Thi B đổi tuổi thành 25");
var find = (name, age)=>{
    for(let i=0; i < students.length; i++){
        if(students[i].name == name)
            students[i].age = age;
    }
    return students;
};
console.log(find("Huynh Thi B", 25)); 

console.log("3. Tính tổng tuổi của danh sách students trên")
var sumAge = ()=>{
    let sum = 0;
    for(let i=0; i < students.length; i++){
        sum += students[i].age;
    }
    return sum;
};
console.log(sumAge()); 

console.log("4. Tìm ra người có tuổi bằng 20");
var findAge = (age)=>{
    let arr = [];
    for(let i=0; i < students.length; i++){
        if(students[i].age == age)
            arr.push(students[i]);
    }
    return arr;
};
console.log(findAge(20)); 

console.log("5. Tìm index của người có tuổi bằng 19");
var findIndex = (age)=>{
    let arr = [];
    for(let i=0; i < students.length; i++){
        if(students[i].age == age)
            console.log(i+1);
    }
};
findIndex(19); 

console.log("6. Tìm xem trong students có người nào là Le Van D không, trả về boolean");
var findName = (name)=>{
    let arr = [];
    for(let i=0; i < students.length; i++){
        if(students[i].name.toLocaleLowerCase() == name.toLocaleLowerCase())
            return true;
    }
    return false;
};
console.log(findName("Le Van D"));
