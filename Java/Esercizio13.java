import java.util.Scanner;

public class Esercizio13{
	public static void main (String[] args){
    Scanner tastiera = new Scanner(System.in);

    System.out.println("How many values?");
    int arrayDim = tastiera.nextInt();

    double [] b = new double[arrayDim];
    double max = b[0];
    int maxIndex = 0;

    System.out.println("What are values of array");
    for (int i = 0;i <b.length ;i++) {
            b[i] = tastiera.nextInt();
        }
    for (int i = 0;i <b.length ;i++) {
            if(b[i] > max) {
                max = b[i];
            }
        }
        System.out.println("Biggest number is"+ max);

    for (int i = 1; i < b.length; i++){
        double newnumber = b[i];
        if (newnumber > b[maxIndex]){
        maxIndex = i;
        }
    } System.out.println(maxIndex);
	}
}	
