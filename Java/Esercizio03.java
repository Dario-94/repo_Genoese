import java.util.Scanner;

public class Esercizio03{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Primo Valore");

		int first = tastiera.nextInt();

		System.out.println("Secondo Valore");

		int second = tastiera.nextInt();

		System.out.println("Terzo Valore");

		int third = tastiera.nextInt();

		System.out.println("Valore Medio");

		System.out.println((first+second+third)/3);
	}
}