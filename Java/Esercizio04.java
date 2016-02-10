import java.util.Scanner;

public class Esercizio04{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Primo Valore");

		int first = tastiera.nextInt();

		System.out.println("Secondo Valore");

		int second = tastiera.nextInt();

		System.out.println("Terzo Valore");

		int third = tastiera.nextInt();

		if(first > second && first > third){
			System.out.println(first);
		} else if (second > first && second > third) {
			System.out.println(second);
		} else {
			System.out.println(third);
		}
	}
}