import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.AfterEach;

public class BaseTest {
    protected WebDriver driver;

    @BeforeEach
    public void setUp() {
        // Configuración de WebDriver (asegúrate de tener el path del chromedriver correcto)
        System.setProperty("webdriver.chrome.driver", "path/to/chromedriver");
        driver = new ChromeDriver();
    }

    @AfterEach
    public void tearDown() {
        // Cierra el navegador después de cada prueba
        if (driver != null) {
            driver.quit();
        }
    }
}