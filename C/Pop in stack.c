
#include <stdio.h>
#include <stdlib.h>

#define MAX_SIZE 100
int stack[MAX_SIZE];
int top = -1;

void push(int value) {
    if (top == MAX_SIZE - 1) {
        printf("Stack is full. Cannot push.\n");
    } else {
        stack[++top] = value;
    }
}
int pop() {
    if (top == -1) {
        printf("Stack is empty. Cannot pop.\n");
        return -1; // You can choose an appropriate value to indicate an error.
    } else {
        int value = stack[top--];
        return value;
    }
}
int main() {
    push(10);
    push(20);
    push(30);

    int poppedValue = pop();
    if (poppedValue != -1) {
        printf("Popped value: %d\n", poppedValue);
    }
    return 0;
}

