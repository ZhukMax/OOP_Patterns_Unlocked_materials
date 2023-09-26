const numbers = [1, 2, 3, 4, 5];

const square = (x) => x * x;
const sum = (a, b) => a + b;

const squaredNumbers = numbers.map(square);
const total = squaredNumbers.reduce(sum);

console.log("Squared numbers:", squaredNumbers);
console.log("Total:", total);
