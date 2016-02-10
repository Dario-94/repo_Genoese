import java.util.Scanner;

public class Esercizio05{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Primo Valore");

		int first = tastiera.nextInt();

		System.out.println("Secondo Valore");

		int second = tastiera.nextInt();

		System.out.println("Terzo Valore");

		int third = tastiera.nextInt();

		if((first*first) + (second*second) == (third*third)){
			System.out.println("è una terna pitagorica");
		} else {
			System.out.println("Error!");
		}
	}
}