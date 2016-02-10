import java.util.Scanner;

public class Esercizio07{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Primo Valore");

		int first = tastiera.nextInt();

		System.out.println("Secondo Valore");

		int second = tastiera.nextInt();

		if(first < second){
			for(int i = first; i = second ; i++){
				System.out.println("Count is: "+ i);
			} 
		}	else {
				while (first > second){
				System.out.println("Error! Insert new value");

				second = tastiera.nextInt();

				}

					for(int i = first; i = second ; i++){
						System.out.println("Count is: "+ i);
				}
			}
		}
	}