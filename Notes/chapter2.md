# chapter 2

### **difference between pseudocode and real code**
- pseudocode use expressive method that is clear and concise to given a specific  algorithm.
- pseudocode is not concerned with issues of software engineering " For example Issues of data abstraction, modularity and error handling "


## Insertion sort
- sort small number of elements
- We rearrange in insertion sort from right to left


**pseudocode of insertion sort**


 INSERTION-SORT(A)

    for j = 2 to A.length                            

         key = A[ j ]

         i = j - 1                                    

         while i > 0 and A [ i ] > key               

             A[ i+1 ] = A[ i ]

             i = i - 1

         A[ i+ 1 ] = key

---

***pseudocode explanation***

 A (5, 2, 4, 6, 1, 3)

 j = 2 : `started from index 2`

 i = j - 1 : `2 -1 =1`

 while i > 0 and A [ i ] > key  : `while 1 > 0 and 5 > 2`

 A[ i+1 ] : `A[1 + 1] = A[2]`

 A[ i ] :`A[1]`

 A[ 2 ] = A[ 1 ] : `switch 2,5 `

 i = i - 1 :  `i = 1 - 1 = 0`

while 0 > 0 and A [ i ] > key :`The condition is not run`

A[ i+ 1 ] = key : `A [0+1] = key  >> A[1] = key  >> A[1] = 2  `

---

### things about a loop invariant:

what is a loop invariant? :`a tool used to prove the correctness of algorithm ,specificially in regards to a loop , it is a properties of type boolean and must be aligned with the goal of the algorithm , it is must hold be true at initialization ,Maintenance and Termination `

1. Initialization: ` It is true prior to the first iteration of the loop.`
2. Maintenance: `If it is true before an iteration of the loop, it remains true before the next iteration.`
3. Termination: `When the loop terminates. `

the invariant gives us a useful property that helps show that the algorithm is correct.

 ## Let us see how these properties hold for insertion sort.

 >**Initialization**  
 j = 2 and the scop of the array A[ 1 ... j-1 ] = A [ 1 ... 2-1] = A [ 1 ]


 >**Maintenance**  
 assuming loop invariant holds at iteration (j) , >> The subarray A [ 1 ... j-1]
 , in the next iteration (j+1) , the code compares and possibl updates with A[ j ] then the subarray A [ 1 ... j ]


 >**Termination**  
 j > A.length = n , each loop iteration increases j by 1 , so that j= n + 1 at that time then the subarray A [ 1 ... n]
 