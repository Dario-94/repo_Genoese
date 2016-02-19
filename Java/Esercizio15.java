import java.util.Scanner;

public class Esercizio15{
	public static void main (String[] args){
    Scanner tastiera = new Scanner(System.in);

    double [] a = {57,32,54,22,28,35};

    stampaArray(a);

    scambiaArray(a);

    stampaArray(a);
    
    }

    public static void stampaArray (double [] a){
        for (int i = 0; i < a.length; i++)
        System.out.println("Elemento " + i + ": " + a[i]);
    }

    public static void scambiaArray (double [] a){
        double i = 0;
        double posMax = 0;
        double posMin = 0;

        for (int i = 0; i < a.length; i++){
            if (a[i] > a[posMax])
                posMax = i;
            if (a[i] < [posMin])
                    posMin = i;
                    i++;
                }
            int temp = a[posMax];
            a[posMax] = a[posMin];
            a[posMin] = temp;
            }
        }
        System.out.println("Massimo " + max);
        System.out.println("Minimo " + min); 
    }
}

    /*System.out.println("What are values of array");
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
	}*/