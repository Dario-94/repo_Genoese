import java.util.Scanner;

public class Esercizio12{
	public static void main (String[] args){
    Scanner input = new Scanner(System.in);

    double [] a = new double[5];
    double sum = 0;

    	for (int i = 0;i < a.length; i++){
        	System.out.println("New value");
        	a[i] = input.nextDouble();
        	sum = sum + a[i];
    	}
		System.out.println("Sum of array is"+ sum);
	}
}	

