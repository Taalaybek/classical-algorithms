import unittest
from src.factorial import factorial


class MathAlgorithmsTest(unittest.TestCase):
    def test_factorial(self):
        self.assertEqual(2, factorial.factorial(2))
        self.assertTrue(120, factorial.factorial(5))
        self.assertFalse(False, factorial.factorial('0'))
        self.assertIsNone(factorial.factorial(0))


if __name__ == '__main__':
    unittest.main()
