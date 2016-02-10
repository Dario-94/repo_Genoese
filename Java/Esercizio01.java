import java.util.Scanner;

public class Esercizio01{
	public static void main(String[] args) {
		Scanner tastiera = new Scanner(System.in);
		System.out.println("Quando sei nato?");

		int born = tastiera.nextInt();

		System.out.println("In che anno siamo?");

		int year = tastiera.nextInt();

		System.out.println("Quanti anni hai?");

		System.out.println(year - born);
	}
}