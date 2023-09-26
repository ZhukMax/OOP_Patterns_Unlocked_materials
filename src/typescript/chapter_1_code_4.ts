class Car {
    private speed: number;

    constructor(speed: number) {
        this.speed = speed;
    }

    public accelerate() {
        this.speed += 10;
    }

    public decelerate() {
        if (this.speed - 10 >= 0) {
            this.speed -= 10;
        }
    }

    public getSpeed(): number {
        return this.speed;
    }
}
