
Selection-Sort (A)

     for i=1 to A.length−1

         index=i

         for j=i+1 to A.length

             if A[ j ]< A[index] and j / index 

                index = j
     
         swap A[i] with A[index]


 ---
 ###  Why does it need to run for only the first n  -1 elements, rather than for all n elements?
 - last element already arranged so here is no need to continue the algorithm for the last element.

 ---
 ### Give the best-case and worst-case running times of selection sort in ‚Θ-notation?
 - Θ(nˆ2)
 ---
 ### What loop invariant does this algorithm maintain?
 - befor each iteration loop the subarray A[ 1..i−1 ] consists of i−1 smallest elements of A, sorted in increasing order.







 





​



 
