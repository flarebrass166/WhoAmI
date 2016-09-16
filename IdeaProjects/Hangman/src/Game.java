import jdk.nashorn.internal.runtime.regexp.joni.Regex;

import java.lang.reflect.Array;
import java.util.*;

/**
 * Created by Matthew on 9/7/2016.
 */
public class Game {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        String alf = "^[a-zA-Z]+$";
        int lives = 6;
        String correctWord = "Hollywood";
        String[] characters = new String[correctWord.length()];
        char[] ch = correctWord.toCharArray();
        String[] correctLetters = new String[correctWord.length()];
        ArrayList<String> guessedLetters = new ArrayList<>();

        for (int i = 0; i < correctWord.length(); i++) {
            characters[i] = String.valueOf(ch[i]);
        }

        menu();
        lives(lives);
        System.out.println();
        letterMenu(correctWord.length());

            do {
                if(lives == 0){
                    System.out.printf("The correct word was %s", correctWord);
                    break;
                }
                System.out.printf("%nGuess a Letter and press enter%nlives left %d%n", lives);
                String guess = input.nextLine();
                if (guess.length() > 1) {
                    System.out.println("You can only guess one letter at a time please");
                    continue;
                }
                if(guessedLetters.contains(guess)){
                    System.out.println("You already guessed that letter");
                    lives(lives);
                    continue;
                }
                if (correctWord.toLowerCase().contains(guess.toLowerCase())) {
                    guessedLetters.add(guess);
                    lives(lives);
                    for (int i = 0; i < correctWord.length(); i++) {
                        if (characters[i].equalsIgnoreCase(guess)) {
                            correctLetters[i] = characters[i];
                        }
                    }
                    for (String e : correctLetters) {
                        if (e != null) {
                            System.out.printf("%s ", e);
                        } else {
                            System.out.print("_ ");
                        }
                    }
                } else {
                    System.out.println("Incorrect!!");
                    guessedLetters.add(guess);
                    lives--;
                    lives(lives);
                    for (String e : correctLetters) {
                        if (e != null) {
                            System.out.printf("%s ", e);
                        } else {
                            System.out.print("_ ");
                        }
                    }
                }
                System.out.println();
                if(Arrays.equals(correctLetters,characters)){
                    System.out.println(" You Win!!");
                }

            }while (!(Arrays.equals(correctLetters, characters)));
    }


    public static void menu() {
        System.out.println("Welcome to Hangman!!\n");
    }
    public static void lives(int i){
        switch (i){
            case 6:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |       |");
                System.out.println("     |       |");
                System.out.println("     |       |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                break;
            case 5:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |   0   |");
                System.out.println("     |       |");
                System.out.println("     |       |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                break;
            case 4:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |   0   |");
                System.out.println("     |   |   |");
                System.out.println("     |       |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                break;
            case 3:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |   0   |");
                System.out.println("     |   |   |");
                System.out.println("     |  /    |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                break;
            case 2:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |   0   |");
                System.out.println("     |   |   |");
                System.out.println("     |  / \\  |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                break;
            case 1:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |  \\0   |");
                System.out.println("     |   |   |");
                System.out.println("     |  / \\  |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                break;
            case 0:
                System.out.println("     _________");
                System.out.println("     |   |   | ");
                System.out.println("     |  \\0/  |");
                System.out.println("     |   |   |");
                System.out.println("     |  / \\  |");
                System.out.println("    _|_______|_");
                System.out.println("_____|___|___|____");
                System.out.println("YOUR DEAD");
                break;
        }
    }

    public static void letterMenu(int n){
        for (int i = 0; i < n; i++) {
            System.out.print("_ ");
        }
        System.out.println();
        System.out.println("Correct Letters So Far");
    }

}
